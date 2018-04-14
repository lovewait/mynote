## map的使用
1. 定义使用map的图片并指定所使用的map的名称:<img src="/i/eg_planets.jpg" border="0" usemap="#planetmap" alt="Planets" />
2. 定义map和名称:<map name="planetmap" id="planetmap">
3. 定义具体使用map的点和map类型:<area shape="circle" coords="180,139,14" href ="/example/html/venus.html" target ="_blank" alt="Venus" />
说明:圆形使用circle,需要定义圆心和半径,长方形使用rect,需要定义对角线起点和重点
浏览器使用id或者name定位map,所以,最好是两个都指定,而且名称相同
将图片放入a链接中,并指定该图片为ismap(该属性没有值),点击图片跳转到指定a连接url时,会带上map的点,如:
```HTML
<a href="/example/html/html_ismap.html">
<img src="/i/eg_planets.jpg" ismap />
</a>
```