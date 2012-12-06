Модуль Для Вопросов-Ответов одного сайта, болванка для создания своего модуля
Сделано на основе Doodles https://github.com/splittingred/Doodles
Но исправлена ошибка и данный модуль - рабочий (только под lexicon ru)

Для базовых переименований:
- в файлах:
 NarkFaq
 NarkFaqs
 narkfaq
 narkfaqs
- в именах папок и файлов:
 вручную можно пройтись, учесть множ. число (s).

Для генерации своей схемы, надо:
- править файл: NarkFaqs/core/components/narkfaqs/model/schema/narkfaqs.mysql.schema.xml
- Сделать копию папки, и потом очистить NarkFaqs/core/components/narkfaqs/model/narkfaqs/
- запустить скрипт: NarkFaqs/_build/build.schema.php
- Скопировать из копии папки обратно файлы и папки, которых нет, и перезаписать narkfaqs.class.php и narkfaq.class.php
