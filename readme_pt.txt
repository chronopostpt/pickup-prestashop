====================================================
Chronopost Pickup (pickme) v1.3.2 etapas de instalação 
====================================================

procedimento de instalação
----------------------------------------------------
1) Copie a pasta "pickme_chronopost" para
a sua pasta de módulos dentro da pasta principal Prestashop

2) Verifique se o servidor tem privilégios de leitura / gravação
para essa pasta e tem a porta de saída TCP 7790 desbloqueada pela firewall.

3) Faça o login na consola de administração para
instalar este módulo:

-> Módulos -> Chronopost Pickup -> Instalar

4) Configure este módulo:

-> Módulos -> Chronopost Pickup -> Configurar


Uma vez instalado, cada encomenda com Chronopost Pickup
selecionado como método de envio, terá a informação
da loja que o utilizador escolheu.



**URL para atualização automática dos pontos Pickup ( para ser chamada no cron ):**

PRESTASHOP_BASE_URL + /modules/pickme_chronopost/async/updatePickUpDatabase.php

exemplo: http://prestashop.example.com/modules/pickme_chronopost/async/updatePickUpDatabase.php
