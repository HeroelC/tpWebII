{foreach from=$imagenes item=imagen}
    <img src="{$imagen['url']}">
    <p>{$imagen['url']}</p>
  </div>
{/foreach}
