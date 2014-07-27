<h2><a href="#readme"><span class="octicon octicon-link"></span></a>READ ME</h2>

<p>A simple view for a output data</p>
<p>This is my non-style data output :</p>
<img src="http://i.imgur.com/Z8enpqj.png"/>
<p>Wanna change your output data's style to :</p>
<img src="http://i.imgur.com/vKykF3t.png"/>

<h2><a href="#installation"><span class="octicon octicon-link"></span></a>Installation</h2>

<div class="highlight highlight-go">
<pre>
 // Each func(interface{}, func(interface{}))

  var buffer bytes.Buffer

  s := []string{"a", "b", "c", "d"}

  fn := func(s interface{}) {
    buffer.WriteString(s.(string))
  }

  e := un.Each(s, fn)
  fmt.Printf("%#v\n", e) //["abcde"]
</pre>
</div>
