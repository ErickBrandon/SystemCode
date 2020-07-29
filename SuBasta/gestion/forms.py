from django import forms
from .models import Registro

class RegistroForm(forms.ModelForm):
    class Meta:
        model = Registro
        fields = [
            'nombre',
            'apellido',
            'username',
            'password',
            'fecha',
        ]
        widgets = {
            'nombre': forms.TextInput(attrs={'placeholder':'Nombre'}),
            'apellido': forms.TextInput(attrs={'placeholder':'Apellido'}),
            'username': forms.EmailInput(attrs={'placeholder':'Email'}),
            'password': forms.PasswordInput(attrs={'placeholder':'Contraseña'}),
            'fecha': forms.DateInput(attrs={'type':'date','placeholder':'Ej. AAAA-MM-DD'}),
        }

class LoginForm(forms.Form):
    username = forms.CharField()
    password = forms.CharField(widget=forms.PasswordInput())