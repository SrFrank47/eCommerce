from django.contrib import admin
from django.urls import path, include
from django.conf.urls import handler404, handler500
from eCommerceWeb.views import home, terms, privacy, contact, about_me, about_company, Error404View, Error500View

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', home, name='home'),
    path('accounts/', include('django.contrib.auth.urls'), name="login"),
    path('support/terms-&-conditions/', terms, name="terms"),
    path('support/privacy-&-conditions/', privacy, name="privacy"),
    path('support/contact/', contact, name="contact"),
    path('know-us/about-me', about_me, name="about_me"),
    path('know-us/about-company', about_company, name="about_company"),
    path('error/', Error404View.as_view(), name="error"),
]
