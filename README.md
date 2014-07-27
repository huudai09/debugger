<h2><a href="#readme"><span class="octicon octicon-link"></span></a>READ ME</h2>

<p>A simple view for a output data</p>
<p>This is my non-style data output :</p>
<img src="http://i.imgur.com/Z8enpqj.png"/>
<p>Wanna change your output data's style to :</p>
<img src="http://i.imgur.com/vKykF3t.png"/>

<h2><a href="#installation"><span class="octicon octicon-link"></span></a>Installation</h2>

<div class="highlight highlight-go"><pre>  <span class="c1">// Each func(interface{}, func(interface{}))</span>

  <span class="kd">var</span> <span class="nx">buffer</span> <span class="nx">bytes</span><span class="p">.</span><span class="nx">Buffer</span>

  <span class="nx">s</span> <span class="o">:=</span> <span class="p">[]</span><span class="kt">string</span><span class="p">{</span><span class="s">"a"</span><span class="p">,</span> <span class="s">"b"</span><span class="p">,</span> <span class="s">"c"</span><span class="p">,</span> <span class="s">"d"</span><span class="p">}</span>

  <span class="nx">fn</span> <span class="o">:=</span> <span class="kd">func</span><span class="p">(</span><span class="nx">s</span> <span class="kd">interface</span><span class="p">{})</span> <span class="p">{</span>
    <span class="nx">buffer</span><span class="p">.</span><span class="nx">WriteString</span><span class="p">(</span><span class="nx">s</span><span class="p">.(</span><span class="kt">string</span><span class="p">))</span>
  <span class="p">}</span>

  <span class="nx">e</span> <span class="o">:=</span> <span class="nx">un</span><span class="p">.</span><span class="nx">Each</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span> <span class="nx">fn</span><span class="p">)</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Printf</span><span class="p">(</span><span class="s">"%#v\n"</span><span class="p">,</span> <span class="nx">e</span><span class="p">)</span> <span class="c1">//["abcde"]</span>
</pre></div>
