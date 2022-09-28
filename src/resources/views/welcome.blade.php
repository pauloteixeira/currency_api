<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free bootstrap documentation template">
    <title>Currency API</title>
    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- using local links -->
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/sidebar-themes.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-treeview.min.css">
    <link rel="stylesheet" href="assets/css/postman.min.css">
</head>

<body>
    <div class="page-wrapper toggled light-theme">
        <div class="modal dark-background" id="snippetModal" tabindex="-1" role="dialog" aria-labelledby="documentation-response-modal" style="display: none;">
        <div class="modal-dialog" role="document">
          <div class="modal-header">
            <div class="title">Exemplo de Response</div>
            <button type="button" class="close btn-circle" data-dismiss="modal" aria-label="Close">
              <div>
              <span id="closeModal" aria-hidden="true">×</span>
              </div>
            </button>
          </div>
          <div class="modal-content">
            <div class="modal-body" style="width: 540.5px;">
              <pre class="  language-javascript">
                  <code class=" language-javascript"></code>
              </pre>
            </div>
          </div>
        </div>
      </div>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand text-white font-weight-bold">Documentação da API</div>
                <!-- sidebar-header  -->
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <div id="tree"></div>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </nav>
        <!-- page-content  -->
        <main class="page-content">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid">
                <div class="row d-flex align-items-center p-3 border-bottom">
                    <div class="col-md-1">
                        <a id="toggle-sidebar" class="btn rounded-0 p-3" href="#"> <i class="fas fa-bars"></i> </a>
                    </div>
                    <div class="col-md-9"></div>
                    <div class="col-md-2 text-left">
                    </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-12 pr-lg-9" id="doc-body">
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12">
                                <div class="api-information">
                                    <div class="collection-name">
                                        <p>Currency API</p>
                                    </div>
                                    <div class="collection-description">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="1">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="GET method" >GET</span>
                                            Health Check <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">http://localhost/api/v1/hc</div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Exemplo de Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Health Check</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="1" data-response-info="response_1">Health Check</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="1"  data-id="response_1">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Health Check">
                                                <code class="is-highlighted">
GET http://localhost/api/v1/hc</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="2">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Buscar por Código <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">http://localhost/api/v1/code</div>
                                    
                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Search By Code">
                                                  <code>
                                                    
{
    "code":"cad"
}
                                                  </code>
                                              </pre>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Exemplo de Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Busca por Código</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="2" data-response-info="response_2">Busca por Código</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="2"  data-id="response_2">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Busca por Código">
                                                <code class="is-highlighted">
POST http://localhost/api/v1/code

{
    "code":"cad"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="3">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Buscar por Lista de Códigos <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">http://localhost/api/v1/code/list</div>
                                    
                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Buscar por Lista de Códigos">
                                                  <code>
                                                    
{
    "code_list":["cad","brl","USD"]
}
                                                  </code>
                                              </pre>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Exemplo de Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Buscar por Lista de Códigos</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="3" data-response-info="response_3">Buscar por Lista de Códigos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="3"  data-id="response_3">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Buscar por Lista de Códigos">
                                                <code class="is-highlighted">
POST http://localhost/api/v1/code/list

{
    "code_list":["cad","brl","USD"]
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="4">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Busca por Lista de Números <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">http://localhost/api/v1/number/list</div>
                                    
                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Busca por Lista de Números">
                                                  <code>
                                                    
{
    "number_list":["986","124","840"]
}
                                                  </code>
                                              </pre>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Exemplo de Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Busca por Lista de Números</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="4" data-response-info="response_4">Busca por Lista de Números</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="4"  data-id="response_4">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Busca por Lista de Números">
                                                <code class="is-highlighted">
POST http://localhost/api/v1/number/list

{
    "number_list":["986","124","840"]
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-no-padding row-eq-height">
                            <div class="col-md-6 col-xs-12 section">
                                <div class="api-information" id="5">
                                     <div class="heading">
                                        <div class="name">
                                            <span class="POST method" >POST</span>
                                            Busca por Número <span class="lock-icon"></span>
                                        </div>
                                     </div>
                                    <div class="url">http://localhost/api/v1/number</div>
                                    
                                    <div class="request-body">
                                        <div class="body-heading">BODY <span class="body-type">raw</span></div>
                                        <hr>
                                            <div class="raw-body code-snippet">
                                              <pre class="body-block click-to-expand-wrapper is-snippet-wrapper " data-title="Busca por Número">
                                                  <code>
                                                    
{
    "number":"124"
}
                                                  </code>
                                              </pre>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 examples">
                                <div class="sample-request">
                                    <div class="heading">
                                        <span>Exemplo de Request</span>
                                    </div>
                                    <div class="responses-index">
                                        <div class="dropdown response-name">
                                            <button class="btn   responses-dropdown truncate" type="button" id="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span id="selected" class="response-name-label">Busca por Número</span>
                                                <span class="caret"></span>

                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="f678f251-1750-4e3a-b5d8-05b4c6b0fb37_dropdown">
                                                <li class="truncate" data-request-info="5" data-response-info="response_5">Busca por Número</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="formatted-requests " data-request-id="5"  data-id="response_5">
                                    <div class="request code-snippet">
                                        <div>
                                            <pre class="click-to-expand-wrapper is-snippet-wrapper " data-title="Busca por Número">
                                                <code class="is-highlighted">
POST http://localhost/api/v1/number

{
    "number":"124"
}</code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </article>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-treeview.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script type="application/javascript">
        var data = [{'text': 'Health Check', 'href': '#1', 'method': 'GET'}, {'text': 'Busca por Código', 'href': '#2', 'method': 'POST'}, {'text': 'Busca por Lista de Códigos', 'href': '#3', 'method': 'POST'}, {'text': 'Busca por Lista de Números', 'href': '#4', 'method': 'POST'}, {'text': 'Busca por Número', 'href': '#5', 'method': 'POST'}]
        $('#tree').treeview({
            data: data,
            levels: 10,
            expandIcon: 'fas fa-caret-right',
            collapseIcon: 'fas fa-caret-down',
            enableLinks: true,
            showIcon: true,
            showMethod: true
        });
    </script>

</body>

</html>