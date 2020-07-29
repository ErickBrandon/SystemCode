from django.shortcuts import render, redirect
from .forms import RegistroForm
from django.contrib.auth import authenticate, login, logout
from django.contrib import messages
from .models import Registro
from django.views.generic import TemplateView,CreateView
from django.urls import reverse_lazy
import datetime
# Create your views here.

class hola(TemplateView):
    template_name = "index.html"


class Entrada(CreateView):
    model = Registro
    form_class = RegistroForm
    template_name = "formularios/Entrada.html"
    success_url = reverse_lazy('Index')

def Perfil(request):
    return render(request,"paginas/perfil.html")

def Subasta(request):
    return render(request,"paginas/subasta.html")

def AgregarProducto(request):
    return render(request,"paginas/AgregarProductos.html")

def Login(request):
    if request.method == 'POST':
        email = request.POST.get('email')
        password = request.POST.get('password')

        user = authenticate(request, username=email, password=password)

        if user is not None:
            login(request, user)
            return redirect('Mi-perfil')
        else:
            messages.info(request, 'Email o Contrasseña incorrectos')
    
    context = {}
    return render(request,"formularios/login.html", context)

def Producto(request):
    return render(request,"paginas/Producto.html")
