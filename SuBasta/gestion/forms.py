from django import forms
from .models import Usuario, Producto

class RegistroForm(forms.ModelForm):
    class Meta:
        model = Usuario
        fields = [
            'nombre',
            'apellido',
            'email',
            'contraseña',
            'fecha',
        ]
        widgets = {
            'nombre': forms.TextInput(attrs={'class':'txt','placeholder':'Nombre'}),
            'apellido': forms.TextInput(attrs={'class':'txt','placeholder':'Apellido'}),
            'email': forms.EmailInput(attrs={'class':'txt','placeholder':'Email'}),
            'contraseña': forms.PasswordInput(attrs={'class':'txt','placeholder':'Contraseña'}),
            'fecha': forms.DateInput(attrs={'class':'txt','type':'date','placeholder':'Ej. AAAA-MM-DD'}),
        }

class ProductoForm(forms.ModelForm):
    class Meta:
        model = Producto
        fields =[
            'nombreP',
            'Autos',
            'Computo',
            'Telefonia',
            'Hogar',
            'Otros',
            'condicon',
            'marca',
            'modelo',
            'tamaño',
            'comentario',
            ]
        widgets ={
            'nombreP':forms.TextInput(attrs={'class':'titulo','placeholder':'Ej: Celular Samsung Galaxy S9'}),
            'Autos':forms.RadioSelect(attrs={'name':'Categoria','value':'Autos'}),
            'Computo':forms.RadioSelect(attrs={'name':'Categoria','value':'Computo'}),
            'Telefonia':forms.RadioSelect(attrs={'name':'Categoria','value':'Telefonia'}),
            'Hogar':forms.RadioSelect(attrs={'name':'Categoria','value':'Hogar'}),
            'Otros':forms.RadioSelect(attrs={'name':'Categoria','value':'Otros'}),




        }