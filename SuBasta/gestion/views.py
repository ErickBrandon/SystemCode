from django.shortcuts import render
# Create your views here.
def hola(request):
    return render(request,"index.html")

def Entrada(request):
    contDia=1
    rangoDia=[]
    rangoAño=[]


    mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]
    for k in range(31):
        rangoDia.append(k+1)
    
    return render(request,"formularios/Entrada.html",{"contDia":contDia,"rangoDia":rangoDia,"ListMes":mes})