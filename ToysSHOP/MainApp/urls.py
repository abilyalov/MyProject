from django.conf.urls import url
from django.urls import path
from . import views

urlpatterns = [
	url(r'^$', views.index, name='index'),
	url(r'^contact/$', views.contact, name='contact'),
	url(r'^register/$', views.register, name='register'),
	url(r'^product/(?P<details_id>\d+)/$', views.detail, name='detail'),
	url(r'^product/addcomm/(?P<details_id>\d+)/$', views.addcomm, name='addcomm'),

]
