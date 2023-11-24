from django.db import models

# Create your models here.


class Administrador(models.Model):
    user = models.CharField(max_length=50)
    password = models.CharField(max_length=50)
    tipo = "administrador"


class Usuario(models.Model):
    user = models.CharField(max_length=50)
    password = models.CharField(max_length=50)
    tipo = "usuario"

class Producto(models.Model):
    price = models.CharField(max_length=50)
    description = models.CharField(max_length=150)

class Promociones(models.Model):
    name = models.CharField(max_length=50)
    