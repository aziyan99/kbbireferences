## KBBI References

Mediawiki extension for create anchor tag `a` to references KBBI (Kamus Besar Bahasa Indonesia). Mainly using word definition of KBBI from [https://kbbi.web.id/](https://kbbi.web.id/)

## Installation
Download the extension and extract it and then copy-paste the extracted folder at `{wiki-installation-path}/extensions`.

## How to use
In editor using `{#kbbiref the_word | kbbi_link(optional) }`

```text
...

{{#kbbiref: hello | hallo }} 

{{#kbbiref: hello }}

Selamat {{ #kbbiref: siang }}, apa kabar?


Selamat {{ #kbbiref: siang | https://kbbi.web.id/siang}}, apa kabar?

....
```