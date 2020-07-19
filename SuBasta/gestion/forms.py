from django import forms
from .models import Registro

class RegistroForm(forms.ModelForm):
    class Meta:
        model = Registro
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