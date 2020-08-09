from django.shortcuts import render, redirect, HttpResponseRedirect
from .forms import *
from django.contrib.auth import authenticate, login, logout
from django.contrib import messages
from .models import *
from django.views.generic import CreateView,ListView,TemplateView
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

    def form_valid(self,form):
        self.object = form.save(commit=False)
        self.object.set_password(self.object.password)
        self.object.save()
        return HttpResponseRedirect(self.get_success_url())

def Perfil(request):
    return render(request,"paginas/perfil.html")

class Subasta(ListView):
    model = Producto
    template_name = "paginas/Subasta.html"


class Subasta_Inversa(ListView):
    model = Producto
    template_name = "paginas/Subasta_Inversa.html"

def AgregarProducto(request):
    if request.POST:
        producto = Producto()
        producto.nombreP = request.POST.get('nombreP')
        producto.categoria = request.POST.get('categoria')
        producto.condicion = request.POST.get('condicion')
        producto.marca = request.POST.get('marca')
        producto.modelo = request.POST.get('modelo')
        producto.tamaño = request.POST.get('tamaño')
        producto.comentario = request.POST.get('comentarios')
        producto.tipoSubasta = request.POST.get('tipoSubasta')
        producto.fotoProd = request.FILES.get('imagen')
        producto.precio = request.POST.get('precio')
        producto.Usuario_id = request.POST.get('id')

        
        producto.save()
        return redirect('Mi-perfil')
        
    
    return render(request, 'paginas/AgregarProductos.html')


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

def logoutUsuario(request):
    logout(request)
    return HttpResponseRedirect('../')

def Productos(request):
    return render(request,"paginas/Producto.html")
