from django.shortcuts import render, redirect
from .forms import MessagesForm
from .models import Messages

def home(request):
        if request.method == "POST":
                form = MessagesForm(request.POST)
                if form.is_valid():
                        message = Messages()
                        message.Name = form.fields["Name"]
                        message.Email = form.fields["Email"]
                        message.Phone = form.fields["Phone"]
                        message.Title = form.fields["Title"]
                        message.Text = form.fields["Text"]

                        form.save()
                        return redirect("home")
        else:
                form = MessagesForm()
                return render(request , 'index.html' , {'form' : form}) 