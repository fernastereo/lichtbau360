<?php 

if (! function_exists('language_flag')) {
  function language_flag($language)
  {
      if (! defined('LANGUAGE_FLAGS')) {
          define('LANGUAGE_FLAGS', [
              'de'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="#cc2b1d" d="M1 11H31V21H1z"></path><path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z"></path><path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#f8d147"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
              'fr'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="#fff" d="M10 4H22V28H10z"></path><path d="M5,4h6V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" fill="#092050"></path><path d="M25,4h6V28h-6c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" transform="rotate(180 26 16)" fill="#be2a2c"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
              'it'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="#fff" d="M10 4H22V28H10z"></path><path d="M5,4h6V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" fill="#41914d"></path><path d="M25,4h6V28h-6c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" transform="rotate(180 26 16)" fill="#bf393b"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
              'pl'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path d="M1,24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V15H1v9Z" fill="#cb2e40"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4v8H31V8c0-2.209-1.791-4-4-4Z" fill="#fff"></path><path d="M5,28H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4ZM2,8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
              'es'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path d="M1,24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4v-3H1v3Z" fill="#b92932"></path><path fill="#0f2c83" d="M1 15H31V22H1z"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4v8H31V8c0-2.209-1.791-4-4-4Z" fill="#f8d047"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>',
              'en'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#fff"></rect><path d="M1.638,5.846H30.362c-.711-1.108-1.947-1.846-3.362-1.846H5c-1.414,0-2.65,.738-3.362,1.846Z" fill="#a62842"></path><path d="M2.03,7.692c-.008,.103-.03,.202-.03,.308v1.539H31v-1.539c0-.105-.022-.204-.03-.308H2.03Z" fill="#a62842"></path><path fill="#a62842" d="M2 11.385H31V13.231H2z"></path><path fill="#a62842" d="M2 15.077H31V16.923000000000002H2z"></path><path fill="#a62842" d="M1 18.769H31V20.615H1z"></path><path d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z" fill="#a62842"></path><path d="M30.362,26.154H1.638c.711,1.108,1.947,1.846,3.362,1.846H27c1.414,0,2.65-.738,3.362-1.846Z" fill="#a62842"></path><path d="M5,4h11v12.923H1V8c0-2.208,1.792-4,4-4Z" fill="#102d5e"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path><path fill="#fff" d="M4.601 7.463L5.193 7.033 4.462 7.033 4.236 6.338 4.01 7.033 3.279 7.033 3.87 7.463 3.644 8.158 4.236 7.729 4.827 8.158 4.601 7.463z"></path><path fill="#fff" d="M7.58 7.463L8.172 7.033 7.441 7.033 7.215 6.338 6.989 7.033 6.258 7.033 6.849 7.463 6.623 8.158 7.215 7.729 7.806 8.158 7.58 7.463z"></path><path fill="#fff" d="M10.56 7.463L11.151 7.033 10.42 7.033 10.194 6.338 9.968 7.033 9.237 7.033 9.828 7.463 9.603 8.158 10.194 7.729 10.785 8.158 10.56 7.463z"></path><path fill="#fff" d="M6.066 9.283L6.658 8.854 5.927 8.854 5.701 8.158 5.475 8.854 4.744 8.854 5.335 9.283 5.109 9.979 5.701 9.549 6.292 9.979 6.066 9.283z"></path><path fill="#fff" d="M9.046 9.283L9.637 8.854 8.906 8.854 8.68 8.158 8.454 8.854 7.723 8.854 8.314 9.283 8.089 9.979 8.68 9.549 9.271 9.979 9.046 9.283z"></path><path fill="#fff" d="M12.025 9.283L12.616 8.854 11.885 8.854 11.659 8.158 11.433 8.854 10.702 8.854 11.294 9.283 11.068 9.979 11.659 9.549 12.251 9.979 12.025 9.283z"></path><path fill="#fff" d="M6.066 12.924L6.658 12.494 5.927 12.494 5.701 11.799 5.475 12.494 4.744 12.494 5.335 12.924 5.109 13.619 5.701 13.19 6.292 13.619 6.066 12.924z"></path><path fill="#fff" d="M9.046 12.924L9.637 12.494 8.906 12.494 8.68 11.799 8.454 12.494 7.723 12.494 8.314 12.924 8.089 13.619 8.68 13.19 9.271 13.619 9.046 12.924z"></path><path fill="#fff" d="M12.025 12.924L12.616 12.494 11.885 12.494 11.659 11.799 11.433 12.494 10.702 12.494 11.294 12.924 11.068 13.619 11.659 13.19 12.251 13.619 12.025 12.924z"></path><path fill="#fff" d="M13.539 7.463L14.13 7.033 13.399 7.033 13.173 6.338 12.947 7.033 12.216 7.033 12.808 7.463 12.582 8.158 13.173 7.729 13.765 8.158 13.539 7.463z"></path><path fill="#fff" d="M4.601 11.104L5.193 10.674 4.462 10.674 4.236 9.979 4.01 10.674 3.279 10.674 3.87 11.104 3.644 11.799 4.236 11.369 4.827 11.799 4.601 11.104z"></path><path fill="#fff" d="M7.58 11.104L8.172 10.674 7.441 10.674 7.215 9.979 6.989 10.674 6.258 10.674 6.849 11.104 6.623 11.799 7.215 11.369 7.806 11.799 7.58 11.104z"></path><path fill="#fff" d="M10.56 11.104L11.151 10.674 10.42 10.674 10.194 9.979 9.968 10.674 9.237 10.674 9.828 11.104 9.603 11.799 10.194 11.369 10.785 11.799 10.56 11.104z"></path><path fill="#fff" d="M13.539 11.104L14.13 10.674 13.399 10.674 13.173 9.979 12.947 10.674 12.216 10.674 12.808 11.104 12.582 11.799 13.173 11.369 13.765 11.799 13.539 11.104z"></path><path fill="#fff" d="M4.601 14.744L5.193 14.315 4.462 14.315 4.236 13.619 4.01 14.315 3.279 14.315 3.87 14.744 3.644 15.44 4.236 15.01 4.827 15.44 4.601 14.744z"></path><path fill="#fff" d="M7.58 14.744L8.172 14.315 7.441 14.315 7.215 13.619 6.989 14.315 6.258 14.315 6.849 14.744 6.623 15.44 7.215 15.01 7.806 15.44 7.58 14.744z"></path><path fill="#fff" d="M10.56 14.744L11.151 14.315 10.42 14.315 10.194 13.619 9.968 14.315 9.237 14.315 9.828 14.744 9.603 15.44 10.194 15.01 10.785 15.44 10.56 14.744z"></path><path fill="#fff" d="M13.539 14.744L14.13 14.315 13.399 14.315 13.173 13.619 12.947 14.315 12.216 14.315 12.808 14.744 12.582 15.44 13.173 15.01 13.765 15.44 13.539 14.744z"></path></svg>',
          ]);
      }
      
      if (! isset(LANGUAGE_FLAGS[$language])) {
          return '';
      } else {
          return LANGUAGE_FLAGS[$language];
      }
  }
}

if (! function_exists('lichtbau_logo')) {
  function lichtbau_logo($class = '', $title = '')
  {
      return sprintf(
          '
          <svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g clip-path="url(#clip0_1_59)">
              <rect width="28" height="30" fill="url(#pattern0_1_59)"/>
            </g>
            <defs>
                <pattern id="pattern0_1_59" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1_59" transform="matrix(0.00145575 0 0 0.0013587 0.0341615 0)"/>
              </pattern>
              <clipPath id="clip0_1_59">
                <rect width="28" height="30" fill="white"/>
              </clipPath>
              <image id="image0_1_59" width="640" height="736" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAoAAAALgCAYAAAAEOcZ5AAAACXBIWXMAAC4jAAAuIwF4pT92AAAgAElEQVR4nO3dP4+c233Y8aPr6zFcTHh9C6kQAtJdXJFuXJpUNxUv9QKMS7VpRL0Ck4B78xaptTQQIEWALNlkmiC7gRsDEi43gK24iC/XgFQkSsDFAEIyCMDgIc+Qw+Xs7szs8+ec5/f5AGtdS4A9fJ4V97u/85zzfO/NmzcJiGExn9y74g/6ejpbvvTtADBuAhAKdy7a1v/5Vv5ad7fjP81ZSul8IDb/++v8z6/X/nMxCVAoAQgDWcwnX6SU7uT/7/fO/WsTdjdHdG9OchyuB+JR8z+ms+XRsB8NIB4BCB1ai7zVtK755y96mNTV6HgtEF81X+IQoBsCEFqwFnp31kKv+brh+l7batl5FYYvhSHA9QhA2NFiPlkPvHsjXK6txelaGB7lMHw9jj8aQLcEIFxibbJ3L3+Z6pXtoyg0KQTYTADCmjzdW4+9265P9U7yhHA1JXwV/YIACEBCOxd89yzlhnC6FoRHghCISAASSl7SfSD4WHNyLgg9RwiMngBk9PJByqvos6TLVZrjaA5zDDrIGhglAcjonJvyPbBpg2tYLRcfTmfLQxcSGAsByCjkZ/ke5C+HLNOV53k6eGipGKiZAKRaa9H30NIuA3i+Nh20kQSoigCkKqKPQjUbSZ6aDAK1EIAULz/T91D0UQnLxEDxBCDFWswnD/O07yt3iQqdrYWgDSRAUQQgRVnMJ83bNx7ZvcvInOYYfOp5QaAEApDBWeIlmOacwYPpbHngxgNDEYAMZm3a97W7QEDNEvGBqSAwBAFIr9YOaX5k2gfvHecQ9Kwg0AsBSC/y8S2P8jKvZ/tgs9O1qaAdxEBnBCCdyu/hfWiZF3b2LKX02PIw0AUBSCfyES4PvZYNru04h+CRSwm0RQDSmrXn+x6nlG66stCqk7w0bPcwcG0CkGvL4fcof3m+D7p1mieCQhDYmwBkb8IPBiUEgb0JQHYm/KAozXmCT+0cBnYhANma8IOineWJ4FO3CbiKAORKwg+qYmkYuJIA5FKL+eSx8IMqCUHgQgKQjfI5fo5zgfo1x8c8co4gsE4A8pH85o6n3tMLo3OcQ/ClWwsIQN7K7+o98OYOGD2vmAMEYHR5g8dT7+qFUBwdA8EJwMAW88mj/JyfDR4Q02leFj50/yEWARhQfs7vwAYPIPN8IAQjAAPJz/k1yz5fRb8WwEbf5OcDLQvDyH3mBseQl3tfij/gEj9t/p5YzCcPXCQYNxPAkVvMJ3fycq9jXYBdNMvCD+0WhnESgCOVd/c+zr/RA+zjLO8UfuzqwbgIwBGyyQNo2UmeBtokAiMhAEckT/0OPOcHdOSJaSCMgwAcifzQ9oEz/YCOmQbCCAjAypn6AQMxDYSKCcCK5Wf9Dk39gIGYBkKlBGCF7PAFCmMaCJURgJXJ5/od2uELFMa5gVARbwKpyGI+aX7D/lb8AQW66y0iUA8TwArkJd/D/BcsQOmepZQeeacwlEsAFs7xLkClTlNKD2wQgTJZAi7YYj55mlL6D+IPqFDzqMq3i/nkkZsH5TEBLNBiPrmVl3xvR78WwCg8zxtELAlDIUwAC5OXfF+KP2BEvsobRO64qVAGAViQvMvXki8wRs2S8NFiPnno7sLwLAEXwC5fIJhn09lSCMKABODAHOwMBNW8Ru6e5wJhGJaAB5SXQo7EHxBQ85zzK88FwjAE4EDyES8/97wfENiNfFSM5WDomSXgnuXn/Q7yrjgA3vFcIPRIAPbI+X4AlzrObw/xXCB0TAD2JD/ncmTJF+BSJzkCX7lM0B3PAPYgP9/yrfgDuNJth0ZD9wRgx/J7MH8+6j8kQLtuODQaumUJuEOL+aTZ7PH1aP+AAN37yXS2PHCdoV0CsAN2+gK0yg5haJkAbFmOvyM7fQFaJQKhRQKwRY55AeiU18dBSwRgSxzzAtALEQgtsAu4BeIPoDe38w7hL1xy2J8AvCbxB9C7JgJfOSsQ9icAryGfUSX+APq3OitQBMIePAO4pxx/DngGGNZZfibwpfsA2zMB3IP4AyiGSSDsQQDuSPwBFEcEwo4E4A7EH0CxRCDsQABuSfwBFE8EwpYE4BbEH0A1RCBsQQBeQfwBVEcEwhUE4CXEH0C1RCBcwjmAF8h/aXxb5IcDYFvOCYQNTAA3WHu9GwB1W00Cb7mP8IEAPMe7fQFGp/n7/HAxn3zh1sI7AnCN+AMYrdt5EigCCS8JwA/yXwoH4g9gtEQgZALwQ/wd5b8cABiv5u/5p+4v0QnAd8QfQBxfL+aTA/ebyMIHYP5LQPwBxNJE4CP3nKhCB+BiPmmWAb4u4KMA0L+/zgf+QzhhD4L2lg8Asj91UDTRhAzAxXxyL6X0nwv4KAAMz9tCCCfcEnA+6++wgI8CQBma478OHA9DJKECMP+X+9BZfwCcc9srQIkk2gSw+S/3zQI+BwDlue14GKIIE4COewFgC46HIYQQm0Ds+AVgRz+azpaWhBmt0QegHb8A7KHZGXxnOlu+cvEYo1EH4GI+uZVSemnTx2Z/dfhn6Ve/+bLEjwYAdOfJ2J8BtOMXAOCc0QagTR8AAJuNMgDzpg/v+AUA2GB0AZjf9PG0gI8CAFCkUQWgN30AAFxtbBPAA2/6AAC43GgCMJ/c/lUBHwUAoGijCMD83N/jAj4KAEDxqg/A/Nzfgef+AAC2M4YJ4GPn/QEAbK/qAFzMJw9SSj8t4KMAAFSj2gBcW/oFAGAHNU8AnfcHALCHKgMwH/lyt4CPAgBQneoCcDGf3HLkCwDA/mqcADryBQDgGqoKwMV88tjSLwDA9VQTgPltH39ZwEcBAKhaTRPApwV8BgCA6lURgHb9AgC0p/gAtOsXAKBdNUwA7foFAGhR0QGY3/Vr6RcAoEXFBqB3/QIAdKPkCeBTS78AAO0rMgAX88m9lNLXBXwUAIDRKXUC6Mw/AICOFBeA+cy/2wV8FACAUSoqAPPGD2f+AQB0qLQJoI0fAAAdKyYAbfwAAOhHSRNAS78AAD0oIgAX88lDb/wAAOhHKRNA0z8AgJ4MHoCL+aSJv5tDfw4AgCgGDcB87Msj320AAP0ZegL42LEvAAD9GiwAF/PJrZTST91vAIB+DTkBtPEDAGAAgwTgYj6549BnAIBhDDUBfOp+AwAMo/cAzK98c+gzAMBAhpgAevYPAGBAvQag6R8AwPD6ngCa/gEADKy3ADT9AwAoQ58TQNM/AIAC9BKApn8AAOXoawJo+gcAUIjOAzC/89f0DwCgEH1MAE3/AAAK0mkA5umfd/4CABSk6wmg6R8AQGE6C8DFfPJFSumBGw4AUJYuJ4CPUko33G8AgLJ0GYAP3WsAgPJ0EoCL+aSJv5vuNwBAebqaAD5yrwEAytR6AObXvt12vwEAytTFBNCzfwAABWs1APPRLw5+BgAoWNsTQM/+AQAUru0AtPwLAFC41gJwMZ88cPQLAED52pwAmv4BAFSglQBczCe3UkpfueEAAOVrawL4wL0GAKhDWwFo9y8AQCWuHYD5zR82fwAAVKKNCaDNHwAAFWkjAD3/BwBQkWsF4GI+aaZ/N9xwAIB6XHcCaPoHAFCZvQNwMZ984ew/AID6XGcCaPoHAFCh6wSgs/8AACq0VwDmV7/ddsMBAOqz7wTQ8i8AQKX2DUCHPwMAVGrnALT8CwBQt30mgJZ/AQAqtk8A3nPDAQDqtVMAOvwZAKB+u04ALf8CAFROAAIABLNrAHr+DwCgclsH4GI+aeLvhhsOAFC3XSaAln8BAEbg8x3+CJZ/R+bP/9Wv05/88H9HvwwAo3L2uz/4x//09//y37mrXOLoe2/evLnyAuW3f3znSgJA8c6ms+UXbhOX2XYJ2PQPAOpwYzGf3HGvuMy2Aej5PwCoh5/bXMoEEADGx89tLnXlM4B5jPytywgAVfmj6Wz52i1jk20mgH6LAID6+PnNhbYJQM8RAEB9BCAX2iYA77p8AFAdAciFLg3A/Po3AKA+txfzifMA2eiqCaAABIB6+TnORlcFoIMkAaBefo6zkQkgAIyXn+NsdGEA5vP/brhsAFAtGznZ6LIJoLExAFTOhk42uSwAfcMAQP0MdPiECSAAjJuBDp/YGID53KDbLhcAVM9Ah09cNAH0zQIA43DTgdCcd1EAGhcDwHgY7PARE0AAGD+DHT4iAAFg/Pxc5yOfBGB+TuCmywQAoyEA+cimCaBvEgAYFxtB+IgABIAY/HznPQEIADH4+c57mwLwlssDAKMjAHlvUwDedXkAYHQMeHjvowBczCe+OQBgnAx4eO/8BFAAAsBIGfSwcj4AnRQOAOMlAHnLBBAA4rARhLcEIADE4ec8b50PQL8ZAMB4+TnPW+cD8IbLAgCjZQLIW+8DcDGf2AACAON20/0lnZsAekk0AIzcYj6xDMxHAegbAgDGz8AHE0AACMbABxNAAAjGwIdPdgEDAONm4MNHAegl0QAwfiaAmAACQDDOAuRdANoSDgBhOAuQ9xNA42AACGIxn/i5H9wqAI2DASAOK3/BCUAAgGBsAgGAeAx+glsFoFEwAMQhAIOzCQQAIBhLwAAQjwlgcDaBAEA8fu4HtwpAh0ICAARhCRgAIBgBCADx3HXPY/tsMZ/ci34RAAAi+dzdBrieX/36y/RXz//MVezYv/3X81H/+aBPloABAIIRgAAQ0GI+8RawwAQgAMTkLWCBNQFoEwgAQCAmgAAAwQhAAIBgBCAAQDACEAAgGAEIABCMAASAmJwCEpgABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABICYXrvvcQlAAIjppfselwAEAAhGAAIABCMAAQCCEYAAAMF8ZhcQAEAsn9kFBAAQiyVgAIjJACgwAQgAAU1nS4+ABSYAAQCCaQLwlZsOABDHZ9PZUgACQCxn7ndsloABIB4bQIITgAAAwawC8MSNBwCIYRWAtoIDQByWgIOzBAwA8Rj8BLcKQDuBAQCCEIAAEI8l4OAsAQNAPJaAg1sF4FH0CwEAEIUJIAAEM50tDX6C8wwgAEAwbwPQ+4ABIAwvf+CjJWAvhgaA8bMBhI8C0JZwABg/q358FIB+IwCA8ROApM/XLkEzAfzKJYGL/eK7H6Rf/frL9Ivvvp+++YtjVwqoUfUBeP/+/XsppacppYOU0uGLFy9E7Y7WA9AEEDZoou8X//T99MvvfpB+t/zcJQJqN5ZYup1S+uvm6/79+yf5TOODFy9eeKRtC+cngBDe7/7v76d/+M2Xog8YqzFOy27nr5/ev3//tJkKisHLmQBCjr5mWbeZ9v3yu++7JMBoBTj67WYTgudi8OjFixeHBXy2YrwPwOls+XIxn0S/HgQi+oCAop0BuB6DZzkGm2cGw8fg+bWt03yxYJT+5+IP0y//6Qdvw+9Xv/nSTQaiibzadyOl9HXzJQY/DcBXApCxWUXf8T/+MP3zb6fuLxCZdwC/sx6Dzb/xfC0IQ0Ty+QBsvjHuDvRZoDWnv/0Xb49rEX0AH3FcymZf5a+f379/P0QMng9AG0GoVhN9/+W//fDt8u5vF3/oRgJ8SgBe7XwMHo3xrMHzAWi7NFURfQA78XN+N6sYXJ01OJqDpwUg1VkdzNxs4hB9AFs7m86WVvr2d/7g6YN8vEyV7fRRADbfGIv55Cw/HAnF8DYOgGsz5GnPKgZTrQdPb/pJ+tJGEIa2OqPvH379pegDaIcdwN3YdPB08TG46aeqncAMwsHMAJ2yAaR752PwqNSzBjcFoG8QeiP6AHrj53u/bpZ88PRFS8DQGQczA/RvOltaAh7OxreQ5E0kg2zM+SQAvROYLog+gEFFewdwyd7HYHq3iWSQg6cverL+JO9wgb01Z/StlndFH8CgrO6Va5C3kFwUgC8FIPtwMDNAkQRgHdZj8HgtBlt/fvOyAPx6BBeSHjTv3H17Tp/oAyiVAKzP3fzVyVtILgpAD4pyKQczA9TDBpDqnX8LyWoyuHfYb/zJbSMIm4g+gCrZADIut/PXX17n4OnLfoofOxA6tvUz+pplXtEHUCXTv/Ha+y0kl/1E90q4gBzMDDA6nv+LYT0Grzx4+rIAPMr/hxi55oy+1UYO0QcwOgIwno0HT6/H4FUTQEasOa7lP/7XW87oAxivs+a5fvc3tE0xePDZRVdkOls224xPo1+1MWsCUPwBjJrn/1i3isF7FwZg5hsHAOrl5zgbCUAAGC/Lv2wkAAFgpBwAzUUuDUDPAQJAtY7dOi5y1QQwmQICQJX8/OZCAhAAxmnjAcCQBCAAjJLz/7jUlQHoOUAAqI7hDZfaZgKYjJEBoCoCkEttG4C+kQCgHgY3XEoAAsC4nObHt+BCWwXgdLZ87TwhAKiC6R9X2nYCmHxDAUAVrNpxpV0C0DcUABRuOlsa2HClrQMwnyfkOBgAKNdz94Zt7DIBTJaBAaBofk6zlV0D0DIwAJTLz2m2slMA5ucKzlxaACjOieNf2NauE8BkvAwARTpwW9iWAASAcfDzma3tHICWgQGgOJZ/2ck+E8DktwwAKIrlX3YiAAGgfn4us5O9AtAyMAAUw/IvO9t3Apj8tgEARbD8y84EIADUzc9jdrZ3AFoGBoDBWf5lL9eZACa/dQDAoJ66/OzjugHoGw8AhmMQw16uFYDT2fJlSunUpQeA3j2fzpavXXb2cd0JYLL7CAAG4ecvexOAAFCfs7wZE/Zy7QDMu4+OXX4A6I3hC9fSxgQw+UYEgF75ucu1tBKA09nywJmAANCLk7wJE/bW1gQw+W0EAHrhCDaurc0A9A0JAN06c/YfbWgtAG0GAYDOHTr7jza0OQFMloEBoFOPXV7a0GoA2gwCAJ05zqttcG1tTwCTZwEBoBNW2WhNFwHoGxQA2nWaV9mgFa0HYB5PP3N7AKA14o9WdTEBTL5RAaBVHq+iVZ0E4HS2PHIkDAC04pmjX2hbVxPAZAoIAK1w9Aut6ywA88Oqp24ZAOzN0S90ossJYPLMAgBci+kfneg6AB0MDQD7Oc7P1EPrOg3A/NCqKSAA7M6z9HSm6wlgygFoCggA23PwM53qPADzFNA3MQBsz7N/dKqPCWCyDAwAWzP9o3O9BKDXwwHA1kz/6FxfE8DkGxoArmT6Ry96C0BTQAC4kmEJvehzAph8YwPAhUz/6E2vAWgKCAAXMiShN31PAFP+BncuIAB8YPpHr3oPwDwFdCwMAHxg+kevhpgAJm8HAYD3TP/o3SAB6B3BAPDeI5eCvg01AUymgACQjqez5aHLQN8GC8A8BfRbDwCRefaPQQw5AUz5mYdTtx6AgJ5PZ8sjN54hDBqA2cMCPgMA9M0qGIMZPADzbz/HQ38OAOjRN/lYNBhECRPA5LcgAAI58+wfQysiAKez5UuviAMgiMd5IyQMppQJYMpTQMfCADBmJ9PZ0jm4DK6YAMy/DRmJAzBmHnmiCCVNAFP+reikgI8CAG1z7AvFKCoAM78dATA2Z36+UZLiAjD/dmRDCABj8tSxL5SkxAlgsiEEgBE5nc6WnnGnKEUGoA0hAIyIN15RnFIngKsNId4QAkDNntn4QYmKDcDMA7MA1MrGD4pVdADmN4Q8KeCjAMCuHnrjB6UqfQLYaJaCTwv4HACwrePpbHnoalGq4gMw//bkAVoAanHm5xalq2ECuDob8JsCPgoAXOWxM/8oXRUBmD22FAxA4Y7zKRZQtGoC0FIwAIWz9Es1apoAWgoGoGSWfqlGVQGYWQoGoDSWfqlKdQGYl4IfFPBRACDlpV8/l6hKjRNAB0QDUBIHPlOdKgMwvYvAZin4pICPAkBczxz4TI2qDcDsQR69A0DfTr3rl1pVHYB5t5X/8gEwhAeWfqlV7RPAJgIPUkrPC/goAMTxJD+PDlWqPgCzh46GAaAnx/k5dKjWKALQ0TAA9MSRL4zCWCaAq6NhflbARwFgvDz3xyiMJgDTuwh86nlAADryJL+SFKo3qgDMPA8IQNs898eojC4A154HdD4gAG3w3B+jM8YJ4Op5QOcDAtCGe577Y2xGGYDpw/mAzwr4KADU6yfO+2OMRhuA6V0EPvS+YAD29CwPE2B0Rh2A2T3PAwKwo5M8RIBRGn0A5uc2RCAA2zrLPzdgtCJMAG0KAWBbZzZ9EEGIAEwfNoV8U8BHAaBcj2z6IIIwAZjeReAjbwoB4AJPbPogilABmNkZDMB5z7zpg0jCBaBNIQCcc+I5caKJOAEUgQCsnNr0QUQhAzB92Bns3Y4Acb19x6/4I6KwAZjeReBR85qfAj4KAP1aHfdixy8hhQ7A9OF4mCcFfBQA+uO4F0ILH4DpXQQ2O7+eFfBRAOjeTxz3QnQCMMvvfBSBAOPmrD/CSwLwYzkCnREIME7O+oNMAH7qnggEGJ1n+Zd8CC8JwE+tnREoAgHGQfzBOQJwAxEIMBre8gEbCMALrEXgaZEfEICrnHjLB2wmAC+R/9J44JVxANURf3AJAXiFfFCo9wYD1EP8wRUE4BZEIEA1xB9sQQBuSQQCFE/8wZYE4A5EIECxxB/sQADuSAQCFEf8wY4E4B5yBN5yTiDA4MQf7EEA7slh0QCDOxZ/sB8BeA0iEGAwzevdxB/sSQBekwgE6J13+8I1CcAWrEXgs+r/MABlE3/QAgHYkiYC819KIhCgGz8Rf9AOAdiy/JfTN6P6QwEUYDpbHrgP0A4B2IHpbPmo+U11dH8wAGAUBGBH8m+qP3ZgNABQGgHYoelseeitIQBAaQRgx/JbQ+44JgYAKIUA7MF0tnyVJ4HHo//DAgDFE4A9ycfEOCsQABicAOxZPibGDmEAYDACcAB5h/Cf2hwCAAxBAA7E5hAAYCgCcEBrm0M8FwgA9EYADmztHcI/C30hAIDeCMBCTGfLp54LBAD6IAALkp8LvOW8QACgSwKwMGvnBT6Jfi0AgG4IwEJNZ8vHKaUfWRIGANomAAs2nS2PLAkDAG0TgIVbWxK2SxgAaIUArMTaLmEHRwMA1yIAK5J3CTfTwG+iXwsAYH8CsDJ5SfiRDSIAwL4EYKXWNog8j34tAIDdCMCK5Wngg5TSj00DAYBtCcARmM6Wh6aBAMC2BOBImAYCANsSgCOzNg18Fv1aAACbCcARytPAh3mn8Gn06wEAfEwAjlizU3g6WzbTwCfRrwUA8IEADGA6Wz5OKf2xdwoDAEkAxjGdLV/ldwr/2LIwAMQmAIPJm0TuWBYGgLgEYEB5k8jj//4/bvxd9GsBABEJwMCW/+/3/k/0awAAEQlAAIBgBCAAQDACEAAgGAEIABCMAAQACEYAAgAEIwABAIIRgAAAwQhAAIBgBCAAQDACEAAgGAEIABCMAAQACEYAAgAEIwABAIIRgAAAwQhAAIBgBCAAQDACEAAgGAEIcD0n//y/pv/GNQRqIgABdneSUvpZSumPp7Plnb/52z/5964hUJPP3S2ArTxPKR02X9PZ8rVLBtRMAAJsdppSOsrBd+gaAWMiAAE+OM5TvqPpbPnSdQHGSgACkZ2sTfmOfCcAUQhAIJJV8B3lKZ9n+YCQBCAwVmcppZdrsWfCB5AJQGAsjnPwvczB98qdBdhMAML+fpRSupVSupO/7rqWvVif7DWR99KGDYDdCEDY06YlxcV8citH4b38r6tAvOE67+xsbaL3avXPntsDuD4BCC3Ky46v8nTqvcV88kUOwVvnvqLH4Wm+Xq/WIu+15/UAuiUAoQd5anVh1KxNDlehmPIUMeV/73aF9+k4/+vrHHZpFXhN7HlGD2A4AhAKsDY5TPkg4o3WJokrq3BMV/x7bVj/jCuroHvL5A6gDgIQKnLVJBEAtvGZqwQAEIsABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBfO/NmzfuOQBAICaAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAIRgACAAQjAAEAghGAAADBCEAAgGAEIABAMAIQACAYAQgAEIwABAAI5nM3PK779+8/TCndin4dACCYIwEYWxOAd6NfBACIxhIwAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAM914DUAAAD4SURBVMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACAYAQgAEAwAhAAIBgBCAAQjAAEAAhGAAIABCMAAQCCEYAAAMEIQACASFJK/x/3jq0CxhGVSwAAAABJRU5ErkJggg=="/>
            </defs>
          </svg>
          ',
          $class,
          $title
      );
  }
}

if (! function_exists('social_icon')) {
  function social_icon($network)
  {
      if (! defined('SOCIAL_ICONS')) {
          define('SOCIAL_ICONS', [
              'instagram'     => '<svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>',
              'tiktok'        => '<svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>',
              'youtube'       => '<svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>',
              'facebook'      => '<svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>',
              'linkedin'      => '<svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>',
          ]);
      }
      
      if (! isset(SOCIAL_ICONS[$network])) {
          return '';
      } else {
          return SOCIAL_ICONS[$network];
      }
  }
}