"""SuBasta URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.0/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from django.conf import settings
from django.conf.urls.static import static
from django.contrib.auth.decorators import login_required
from gestion import views
from gestion.views import *
from gestion import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('',hola.as_view(), name='Index'),
    path('Entrada/',Entrada.as_view(),name='Entrada'),
    path('Mi-Perfil/',login_required(views.Perfil),name='Mi-perfil'),
    path('Subasta/',login_required(Subasta.as_view()),name='Subasta'),
    path('Subasta_Inversa/',login_required(Subasta_Inversa.as_view()),name='Subasta_Inversa'),
    path('AgregarProductos/',login_required(views.AgregarProducto),name='AgregarProductos'),
    path('Login/',views.Login,name='Login'),
    #path('logout/',login_required(logoutUsuario), name='logout'),
    path('Productos/',login_required(views.Producto),name='Producto'),

]

if settings.DEBUG:
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
