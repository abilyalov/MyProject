from django.db import models

# Create your models here.
# class User(models.Model):
# 	email = models.EmailField()
# 	name = models.CharField(max_length = 128)
#
# 	def __str__(self):
# 		return '%s %s' % (self.id, self.name,)
#
# 	class Meta:
# 		verbose_name = ''
# 		verbose_name_plural = ''

class Details(models.Model):
    title = models.CharField(max_length = 128)
    Brand = models.CharField(max_length = 128)
    Short_discription = models.TextField()
    Price = models.IntegerField()
    Full_discription = models.TextField()

    def __str__(self):
	       return '%s %s' % (self.id, self.title,)
    class Meta:
	    verbose_name = 'Details'
	    verbose_name_plural = 'Details'

class Comments(models.Model):
    Text = models.TextField(verbose_name = "Comment text:")
    comments_detiles = models.ForeignKey(Details, on_delete=models.CASCADE)

    # def __str__(self):
	# 	return '%s %s' % (self.id, self.,)

    class Meta:
        verbose_name_plural = 'Comment'
        verbose_name = 'Comments'
