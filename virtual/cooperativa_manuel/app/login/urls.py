from django.urls import path, include
from . import views
urlpatterns = [
    path('',views.index, name='autenticar'),
    path('salir_sistema',views.salirSistema, name='salir_sistema')

]
