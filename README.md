# PDF Generation Services in sinatra

Generate PDFs from ERB files.

### Install

1. Clone the directory 

2. bundle install

### Run App

ruby app.rb

### Services

1. Save ERB Template - Input : ERB template and assets(css files and images) via post :
    
    Sample Request =>
    ```ruby
    RestClient.post('http://localhost:4567/save_template', 
      :content => File.open('test.erb', 'rb').read ,
      :assets => [ File.new('img_lights.jpg'),File.new('test.css')])
    ```
    
    *Notes:* - 

    1. If ERB template have only absolute URLs of assets(images,css) - No need to pass 'assets' paramataer.
    
    2. If ERB template have relative URLs of assets(images,css) - Need to pass 'assets' paramataer. Relative URLs of assets 
    must be like (`cat.png`) or (`/cat.png`) format only. Relative URLs should not be like (`images/cat.png`) or (`/images/cat.png`).
   
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

    (2) In case of public directory not found or permissions issues
    ```json
    {
    "status":500,
    "template_id":null,
    "message":"Template not saved successfully"
    }
    ```
    (3) In case of assets directory not found or permissions issues
    ```json
    {
    "status":500,
    "template_id":"1467624639irntq",
    "message":"Assets not saved successfully"
    }
    ```



2. Generate PDF from ERB - Input : template id, json data, output file name via post

    Sample Request =>

    ```ruby
    RestClient.post('http://localhost:4567/generate_pdf', 
      :template_id => 92121212121 ,
      :file_name => "myfile",
      :data => {"name":"rahul","lname":"PATEL","email":"rahul@gmail.com","phone":"9889701122"}.to_json) 
    ```

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

## Run this Sinatra app using JRuby

### Install JRuby
1. rvm install jruby
2. rvm use jruby

### Install JRuby bundler
jruby -S gem install bundler

### Install gems 
jruby -S bundle install

### Run App
jruby app.rb


## Running this application on Tomcat

1. Clone the directory
2. cd pdf-generation-service
3. Install warble
    ```ruby
    jruby -S gem install warbler
    ```
4. Run warbler to create a war file
    ```ruby
    jruby -S warble
    ```
5. Copy the file pdf-service.war and paste this file inside webapps directory of tomcat

6.  Add the following on top of `webapps/pdf-service/WEB-INF/app.rb` file:

    ```ruby
    MOUNT_URL = 'pdf-service'
    ```
7. Make 'pdf-service' directory writable for the web server
8. Start Tomcat Server

## Mount it inside a rails app

1. Clone this inside lib directory of rails app
2. Add the following to your `config/routes.rb`:

    ```ruby
    require 'pdf-generation-service/app'
    mount Sidekiq::App => '/pdf-service'
    ```
3. Add the following on top of `lib/pdf-generation-service/app.rb` file:

    ```ruby
    MOUNT_URL = 'pdf-service'
    ```
4. Add the following to rails `Gemfile`:

    ```ruby
    Dir.glob File.expand_path("../lib/pdf-generation-service/Gemfile", __FILE__) do |file|
      puts "Loading #{file} ..." if $DEBUG # `ruby -d` or `bundle -v`
      instance_eval File.read(file)
    end
    ```
5. bundle install

*Note:* - Server must be multi-threaded

## Sample Services Urls in Rails

1. To Save template - 
    ```ruby
    http://localhost:3000/pdf-service/save_template
    ```
2. To Generate PDF - 
    ```ruby
    http://localhost:3000/pdf-service/generate_pdf
    ```


## Copyright

Copyright (c) 2016 Cybrilla Technologies.

