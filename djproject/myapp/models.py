from django.db import models

class Messages(models.Model):
    Name = models.CharField(null=False , max_length=100)
    Email = models.EmailField(null=False , max_length=150)
    Phone = models.PositiveIntegerField(null=True)
    Title = models.CharField(null=False , max_length=100)
    Text = models.TextField(null=False)