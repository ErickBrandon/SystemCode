from django.db import models

# Create your models here.

class Usuario(models.Model):
    idUsuario=models.AutoField(primary_key= True)
    nombre=models.CharField(max_length=50)
    apellido=models.CharField(max_length=50)
    email=models.EmailField(max_length=100)
    contraseña=models.CharField(max_length=30)
    fecha=models.DateField(max_length=20)

class Producto(models.Model):
    idProducto=models.AutoField(primary_key= True)
    nombreP=models.CharField(max_length=30)
    categoria=models.CharField(max_length=9)
    condicion=models.CharField(max_length=12)
    marca=models.CharField(max_length=15)
    modelo=models.CharField(max_length=15)
    tamaño=models.CharField(max_length=15)
    Comentario=models.CharField(max_length=100)
    idUduario=models.ForeignKey(Usuario, on_delete=models.CASCADE)