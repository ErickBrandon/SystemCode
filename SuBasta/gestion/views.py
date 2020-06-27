from django.shortcuts import render, redirect
from .forms import RegistroForm
import datetime
# Create your views here.
def hola(request):
    return render(request,"index.html")

def Entrada(request):
    if request.method == "POST":
        form = RegistroForm(request.POST)
        if form.is_valid():
            form.save()
        return redirect('Index')
    else:
        form = RegistroForm()

    return render(request,"formularios/Entrada.html", {'form':form})

def Perfil(request):
    return render(request,"paginas/perfil.html")

def Subasta(request):
    return render(request,"paginas/subasta.html")

def AgregarProducto(request):
    return render(request,"paginas/AgregarProductos.html")
