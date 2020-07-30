from django.contrib.auth.models import AbstractBaseUser, BaseUserManager
from django.db import models

# Create your models here.

class UsuarioManager(BaseUserManager):
    def create_user(self,username,nombre,apellido,email,fecha,password=None):
        if not username:
            raise ValueError('El usuario debe tener un correo electrónico')

        usuario = self.model(
            username = self.normalize_email(email),
            nombre = nombre,
            apellido = apellido,
            fecha=fecha,
            email=email
        )

        usuario.set_password(password)
        usuario.save()
        return usuario

    def create_superuser(self,username,nombre,apellido,password,fecha,email):
        user = self.create_user(
            username=username,
            nombre=nombre,
            apellido=apellido,
            password=password,
            fecha=fecha,
            email=email
        )
        user.usuario_administrador = True
        user.save()
        return user


class Registro(AbstractBaseUser):
    username=models.CharField(max_length=100, unique=True)
    nombre=models.CharField(max_length=50)
    apellido=models.CharField(max_length=50)
    email=models.EmailField(max_length=100)
    fecha=models.DateField(max_length=20)
    usuario_activo=models.BooleanField(default=True)
    usuario_administrador=models.BooleanField(default=True)
    object = UsuarioManager()

    USERNAME_FIELD = 'username'
    REQUIRED_FIELDS = ['nombre', 'apellido', 'fecha', 'email']

    def __str__(self):
        return f'{self.nombre},{self.apellido}'

    def has_perm(self,perm,obj = None):
        return True

    def has_module_perms(self,app_label):
        return True

    @property
    def is_staff(self):
        return self.usuario_administrador

class Producto(models.Model):
    idProducto=models.AutoField(primary_key=True)
    nombreP=models.CharField(max_length=30)
    categoria=models.CharField(max_length=9)
    condicion=models.CharField(max_length=12)
    marca=models.CharField(max_length=10)
    modelo=models.CharField(max_length=15)
    tamaño=models.CharField(max_length=10)
    comentrio=models.CharField(max_length=150)
    Usuario=models.ForeignKey(Registro,on_delete=models.CASCADE)