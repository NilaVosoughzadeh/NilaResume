from django.shortcuts import render
from .forms import Messages

def home(request):
        return render(request , 'index.html')