from django.db import models

class Artista(models.Model):
    listaGenero=(
        ('femenino', 'Femenino'),
        ('masculino', 'Masculino'),
    )
   
    artista_id = models.AutoField(primary_key = True)
    cedula = models.CharField(max_length=10, null = False, unique = True)
    nombres = models.CharField(max_length=70, null = False)
    apellidos = models.CharField(max_length=70, null = False)
    genero = models.CharField(max_length=15, choices = listaGenero, null = False, default="femenino")
    correo = models.EmailField(max_length=100, null = False)

    

class Cancion(models.Model):
    listaTipoCancion = (
        ('Salsa', 'salsa'),
        ('rock', 'rock'),
        ('electronica', 'electronica'),
    )
    cancion_id = models.AutoField(primary_key = True)
    codigo = models.CharField(max_length = 20, unique = True, null = False)
    nombre = models.CharField(max_length=70, null = False)
    tipoCancion = models.CharField(max_length = 30, choices = listaTipoCancion, default = 'rock', null = False)
    artista = models.ForeignKey(Artista, on_delete = models.CASCADE)

   


