# Generated by Django 2.0.3 on 2018-04-13 15:15

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Comments',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('Text', models.TextField()),
            ],
            options={
                'verbose_name': 'Comments',
                'verbose_name_plural': 'Comment',
            },
        ),
        migrations.CreateModel(
            name='Details',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=128)),
                ('Brand', models.CharField(max_length=128)),
                ('Short_discription', models.TextField()),
                ('Price', models.IntegerField()),
                ('Full_discription', models.TextField()),
            ],
            options={
                'verbose_name': 'Details',
                'verbose_name_plural': 'Details',
            },
        ),
        migrations.AddField(
            model_name='comments',
            name='detiles',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='MainApp.Details'),
        ),
    ]
