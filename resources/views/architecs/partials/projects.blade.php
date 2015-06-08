<div class="row categories" id="categories-list">  
  <div class="col-sm-6 col-md-3 category" id="category-1"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Projects (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-2"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Urbanism (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="#category-3" class="anchor">History & Theory (3)</a></p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-4"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Graphic Representation (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-5"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Construction (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="#category-6" class="anchor">Structures (5)</a></p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-7"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Conditioning Systems (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-8"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Optional Subjects (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-9"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Competitions (0)</p></div></div>
  <div class="col-sm-6 col-md-3 category" id="category-10"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p>Other works (0)</p></div></div>
</div>
<div class="projects">
  <h4 id="category-3">History & Theory (3)</h4>
  <div class="row categories">
      <div class="col-sm-6 col-md-3 project category-3"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 1</a></p></div></div>
      <div class="col-sm-6 col-md-3 project category-3"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 2</a></p></div></div>
      <div class="col-sm-6 col-md-3 project category-3"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 3</a></p></div></div>
  </div>
  <a href="#categories-list" class="up anchor"><span class="glyphicon glyphicon-chevron-up"></span> RETURN</a>

  <h4 id="category-6">Structures (5)</h4>
  <div class="row categories">
      <div class="col-sm-6 col-md-3 project category-6"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 1</a></p></div></div>
      <div class="col-sm-6 col-md-3 project category-6"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 2</a></p></div></div>
      <div class="col-sm-6 col-md-3 project category-6"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 3</a></p></div></div>
      <div class="col-sm-6 col-md-3 project category-6"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 4</a></p></div></div>
      <div class="col-sm-6 col-md-3 project category-6"><div class="project-box"><img src="/images/tmp/project.jpg" class="img-responsive"/><p><a href="{{ url('/architec/' . $user->id . '/123') }}">Project 5</a></p></div></div>
  </div>
  <a href="#categories-list" class="up anchor"><span class="glyphicon glyphicon-chevron-up"></span> RETURN</a>
</div>
<style>
  .project-box{margin-bottom:15px;padding:5px;border: 1px solid #ddd;}
  .project-box img{margin-bottom:10px;}
  .categories .category .project-box{background-color:#FAFAFA;cursor:pointer;}
  .categories .category.selected .project-box{background-color:#FFF;}
  .categories .category .project-box p, .categories .category .project-box a{font-weight:bold;text-transform:uppercase;}
  .projects h4{padding-top:78px;}
  .up:hover{text-decoration:none;}
</style>