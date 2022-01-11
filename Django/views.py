from django.shortcuts import render
from django.http import HttpResponse

def home(request):
    #return HttpResponse("This is a Basic Calculator")
    if(request.GET.get('status')):
        #num1 = float(request.GET.get("num1"))
        #num2 = float(request.GET.get("num2"))
        num1 = float(request.POST["num1"])
        num2 = float(request.POST["num2"])
        result = num1 + num2
        return render(request,'calculator/home.html',{"result":result})
    else:
        return render(request,'calculator/home.html',{"result":"Null"})
