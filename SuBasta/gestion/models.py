from django.db import models

# Create your models here.

class Registro(models.Model):
    nombre=models.CharField(max_length=50)
    apellido=models.CharField(max_length=50)
    email=models.EmailField(max_length=100)
    contraseña=models.CharField(max_length=30)
    fecha=models.DateField(max_length=20)
