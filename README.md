# PDF Generation Services in sinatra

Generate PDFs from ERB files.

### Install

1. Clone the directory 

2. bundle install

### Run App

ruby app.rb

### Services

#### 1. Save ERB Template - Input : ERB template and assets(css files and images) via post :
    
    Sample Request =>
    RestClient.post('http://localhost:4567/save_template', 
      :content => File.open('test.erb', 'rb').read ,
      :assets => [ File.new('img_lights.jpg'),File.new('test.css')])

    *Note:* - User can directly pass erb template as content instead of reading from file
      
    Sample Response in Positive cases =>

    ```json
    {
    "status":200,
    "template_id":"1466703153wjozo",
    "message":"Template saved successfully"
    }
    ```


    Sample Response in Negative cases -

    (1) In case of content is missing 
    ```json
    {
    "status":400,
    "message":"Content is missing"
    }
    ```

    (2) In case of templates directory not found or permissions issues
    ```json
    {
    "status":500,
    "template_id":null,
    "message":"Template not saved successfully"
    }
    ```
    (3) In case of public directory not found or permissions issues
    ```json
    {
    "status":500,
    "template_id":"1467624639irntq",
    "message":"Assets not saved successfully"
    }
    ```



#### 2. Generate ERB to PDF - Input : template id, json data, output file name via post

    Sample Request =>
    RestClient.post('http://localhost:4567/generate_pdf', 
      :template_id => 92121212121 ,
      :file_name => "myfile",
      :data => {"name":"rahul","lname":"PATEL","email":"rahul@gmail.com","phone":"9889701122"}.to_json) 

    Sample Response in Positive cases =>
    ```json
    {
    "pdf_url":"http://localhost:4567/pdfs?file_name=1466703910klked.pdf",
    "status":200
    }
    ```
    Sample Response in Negative cases -

    (1) PDFKIT is not working properly
    ```json
    {
    "status":500,
    "message":"Internal Error"
    }
    ```
    (2) Variables are missing in data 
    ```json
    {
    "status":500,
    "message":"Internal Error (variables are missing in data)"
    }
    ```


## Copyright

Copyright (c) 2016 Cybrilla Technologies.

