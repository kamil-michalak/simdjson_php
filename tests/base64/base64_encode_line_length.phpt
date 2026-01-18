--TEST--
Test simdjson_base64_encode() function : line length
--FILE--
<?php
$input = <<<TEXT
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac scelerisque nisi. Vestibulum congue, lacus non tincidunt rhoncus, metus velit ultrices lorem, vel cursus dolor elit vitae libero. Donec ut ante ultricies, fringilla mauris in, dapibus libero. Aliquam fringilla lectus non auctor congue. Proin sodales eleifend erat in tincidunt. Morbi pellentesque nulla ac elit luctus, eget accumsan tortor porttitor. Pellentesque elementum dui vitae ipsum finibus efficitur.
TEXT;
echo simdjson_base64_encode($input, false, 76);
--EXPECT--
TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4g
RG9uZWMgYWMgc2NlbGVyaXNxdWUgbmlzaS4gVmVzdGlidWx1bSBjb25ndWUsIGxhY3VzIG5vbiB0
aW5jaWR1bnQgcmhvbmN1cywgbWV0dXMgdmVsaXQgdWx0cmljZXMgbG9yZW0sIHZlbCBjdXJzdXMg
ZG9sb3IgZWxpdCB2aXRhZSBsaWJlcm8uIERvbmVjIHV0IGFudGUgdWx0cmljaWVzLCBmcmluZ2ls
bGEgbWF1cmlzIGluLCBkYXBpYnVzIGxpYmVyby4gQWxpcXVhbSBmcmluZ2lsbGEgbGVjdHVzIG5v
biBhdWN0b3IgY29uZ3VlLiBQcm9pbiBzb2RhbGVzIGVsZWlmZW5kIGVyYXQgaW4gdGluY2lkdW50
LiBNb3JiaSBwZWxsZW50ZXNxdWUgbnVsbGEgYWMgZWxpdCBsdWN0dXMsIGVnZXQgYWNjdW1zYW4g
dG9ydG9yIHBvcnR0aXRvci4gUGVsbGVudGVzcXVlIGVsZW1lbnR1bSBkdWkgdml0YWUgaXBzdW0g
ZmluaWJ1cyBlZmZpY2l0dXIu
