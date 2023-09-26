# CodeIgniter Çoklu Dil Kullanımı

Bu CodeIgniter projesi, çoklu dil yapısını uygulamanıza entegre etmek için özel olarak tasarlanmış bir çekirdek dosyası içerir. Bu sayede tüm projenizde ayrı ayrı çoklu dil işlemlerini çağırmak zorunda kalmazsınız.

## Nasıl Kullanılır

1. Projeyi İndirin: Bu projeyi GitHub'dan indirin veya klonlayın.

2. CodeIgniter Kurulumu: CodeIgniter'ı kurun veya varolan bir projeye ekleyin.

3. Çekirdek Dosyası Ekleme: `application/core` dizinindeki `MY_Controller.php` dosyasını projenizin `application/core` dizinine ekleyin. Bu dosya, çoklu dil desteği ekler.

4. Dil Dosyalarını Oluşturma: İhtiyacınıza göre `application/language` dizininde dil dosyalarınızı oluşturun. Örneğin, `tr_lang.php` ve `en_lang.php` gibi dosyalar oluşturabilirsiniz.

5. Çoklu Dil Kullanımı: Controller ve görünümlerde `lang` fonksiyonunu kullanarak metinleri çevirmek için bu şekilde kullanabilirsiniz:

```php
   $this->lang->line('language_key');
```

Örneğin, tr_lang.php dosyasında welcome_message adlı bir dil anahtarını tanımladıysanız:

```php
$this->lang->line('welcome_message');
```

Dil Değiştirme: Kullanıcıların dilini değiştirmek için bir arayüz ekleyebilirsiniz. Dil değiştirme işlevini de çekirdek dosyanızda tanımlayabilirsiniz.

# Projeyi Başlatma
Projenizi başlatmak ve çoklu dil yapısını kullanmaya başlamak için aşağıdaki adımları izleyebilirsiniz:

1. Proje Dosyalarını İndirin veya Klonlayın.
2. CodeIgniter'ı Yükleyin veya Varolan Projeye Ekleyin.
3. Çekirdek Dosyasını Ekleyin: MY_Controller.php dosyasını application/core dizinine ekleyin.
4. Dil Dosyalarını Oluşturun: İhtiyacınıza göre dil dosyalarını application/language dizininde oluşturun.
5. Controller ve Görünümlerde Çoklu Dil Kullanımı: Metinleri çevirmek için lang fonksiyonunu kullanın.
6. Kullanıcıların Dilini Değiştirme: İhtiyaç duyarsanız, dil değiştirme işlevini projenize ekleyin.


# Katkıda Bulunma

Bu proje açık kaynaklıdır ve katkıda bulunmaktan çekinmeyin. Hataları bildirmek, önerilerde bulunmak veya iyileştirmeler yapmak için GitHub deposuna katkıda bulunabilirsiniz.

# Lisans

Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için LİSANS dosyasını inceleyebilirsiniz.



# CodeIgniter Multi-Language Usage

This CodeIgniter project includes a custom core file designed to integrate a multi-language structure into your application. This way, you don't have to call separate multi-language functions in your entire project.

## How to Use

1. Download the Project: Download or clone this project from GitHub.

2. Install CodeIgniter: Install CodeIgniter or add it to an existing project.

3. Adding the Core File: Add the `MY_Controller.php` file from the `application/core` directory to your project's `application/core` directory. This file adds multi-language support.

4. Creating Language Files: Create your language files in the `application/language` directory as needed. For example, you can create files like `tr_lang.php` and `en_lang.php`.

5. Using Multi-Language: You can use the `lang` function in controllers and views to translate texts as follows:

```php
   $this->lang->line('language_key');
```

For example, if you have defined a language key named welcome_message in the tr_lang.php file:

```php
$this->lang->line('welcome_message');
```

Language Switching: You can add an interface to allow users to change the language. You can also define the language switching functionality in your core file.

# Getting Started

To start your project and use the multi-language structure, follow these steps:

1.Download or Clone Project Files.
2.Install CodeIgniter or Add It to an Existing Project.
3.Add the Core File: Place the MY_Controller.php file in the application/core directory.
4.Create Language Files: Create language files as needed in the application/language directory.
5.Using Multi-Language: Utilize the lang function to translate texts in controllers and views.
6.Language Switching: If necessary, add the language switching functionality to your project.


# Contributions

This project is open-source, and you are encouraged to contribute. Feel free to report bugs, make suggestions, or implement improvements by contributing to the GitHub repository.

# License

This project is licensed under the MIT License. For more information, please refer to the LICENSE file.



