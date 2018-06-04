from django.contrib import admin
from .models import Details, Comments


# Register your models here.
class ArticleInline(admin.StackedInline):
    model = Comments
    extra = 3

class ArticleAdmin(admin.ModelAdmin):
    inlines = [ArticleInline]

admin.site.register(Details, ArticleAdmin)
