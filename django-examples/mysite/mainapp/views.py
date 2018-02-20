from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'mainapp/homePage.html')

def contact(request):
    return render(request, 'mainapp/basic.html', {'values': ['Задавайте вопросы по телефону', '+971 505 043 052', 'example@gmail.com']})
