from django.shortcuts import render
import datetime
# Create your views here.
def hola(request):
    return render(request,"index.html")

def Entrada(request):
    año_actual=datetime.datetime.now()
    año=año_actual.year
    contDia=1
    rangoDia=[]
    ListAño=[]
    for i in range(1920,año+1):
        ListAño.append(i)

    mes=["Enero","Febrero","Marzo",
    "Abril","Mayo","Junio",
    "Julio","Agosto","Septiembre",
    "Octubre","Noviembre","Diciembre"]

    for k in range(31):
        rangoDia.append(k+1)
    
    return render(request,"formularios/Entrada.html",
    {"contDia":contDia,"rangoDia":rangoDia,"ListMes":mes,
    "ListAño":ListAño,})

def Perfil(request):
    return render(request,"paginas/perfil.html")

def Subasta(request):
    return render(request,"paginas/subasta.html")

def AgregarProducto(request):
    return render(request,"paginas/AgregarProductos.html")
