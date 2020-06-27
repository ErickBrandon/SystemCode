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
            'nombre': forms.TextInput(attrs={'placeholder':'Nombre'}),
            'apellido': forms.TextInput(attrs={'placeholder':'Apellido'}),
            'email': forms.EmailInput(attrs={'placeholder':'Email'}),
            'contraseña': forms.PasswordInput(attrs={'placeholder':'Contraseña'}),
            'fecha': forms.DateInput(attrs={'placeholder':'Ej. AAAA-MM-DD'}),
        }