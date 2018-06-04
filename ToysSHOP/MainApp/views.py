from django.shortcuts import render, redirect, get_object_or_404
from .models import Details, Comments
from .forms import CommentForm
from django.contrib import auth
# Create your views here.
def index(request):
    return render(request, 'MainApp/index.html', {'details': Details.objects.all(), 'username': auth.get_user(request).username})

def contact(request):
    return render(request,'MainApp/contact.html')

def register(request):
    return render(request,'MainApp/reg.html')

def detail(request, details_id):
    comment_form = CommentForm
    args = {}
    args['details'] = Details.objects.get(id = details_id)
    args['Comments'] = Comments.objects.filter(comments_detiles_id = details_id)
    args['form'] = comment_form
    args['username'] = auth.get_user(request).username
    return render(request, 'MainApp/details.html', args)

def addcomm(request, details_id):
    if request.POST:
        form = CommentForm(request.POST)
        if form.is_valid():
            comment = form.save(commit = False)
            comment.comments_detiles = Details.objects.get(id = details_id)
            form.save()
    return redirect('/product/%s' % details_id)
