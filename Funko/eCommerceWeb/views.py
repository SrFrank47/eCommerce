from django.http import Http404, HttpResponseServerError
from django.shortcuts import render
from django.views.generic import (
    View,
    TemplateView,
    ListView,
    DetailView
)


# Create your views here.

def home(request):
    return render(request, 'index.html')


def login(request):
    return render(request, 'login.html')


def terms(request):
    return render(request, 'pages/terms-conditions.html')


def privacy(request):
    return render(request, 'pages/privacy-policy.html')


def contact(request):
    return render(request, 'pages/contact.php')


def about_me(request):
    return render(request, 'pages/about-me.html')


def about_company(request):
    return render(request, 'pages/about-company.html')


class Error404View(View):
    def get(self, request, **kwargs):
        return render(request, 'pages/notFound.html')


class Error500View(View):
    def get(self, request):
        return render(request, 'pages/error500.html')

    @classmethod
    def as_error_view(cls):

        v = cls.as_view()

        def view(request):
            r = v(request)
            r.render()
            return r
        return view
