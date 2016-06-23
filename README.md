# PDF Generation Services in sinatra

Generate PDFs from ERB files.

### Install

1. Clone the directory 

2. bundle install

3. sudo gem install sbfaulkner-sinatra-prawn -s http://gems.github.com

### Run App

ruby app.rb

### Services

1. Save ERB Template - Input : ERB template and assets(css files and images) via post :
    
    Sample Request =>
    RestClient.post('http://localhost:4567/save_template', 
      :content => File.open('test.erb', 'rb').read ,
      :assets => [ File.new('img_lights.jpg'),File.new('test.css')])

    Sample Response =>
    {"status":200,"template_id":"1466703153wjozo","message":"Template saved successfully"}

*Note:* - User can direcoty pass erb template as content instead of reading from file

2.  Generate ERB to PDF - Input : template id, json data, output file name via post

    Sample Request =>
    RestClient.post('http://localhost:4567/generate_pdf', 
      :template_id => 92121212121 ,
      :file_name => "myfile",
      :data => {"name":"rahul","lname":"PATEL","email":"rahul@gmail.com","phone":"9889701122"}.to_json) 

    Sample Response =>
    {"pdf_url":"http://localhost:4567/pdfs?file_name=1466703910klked.pdf","status":200}

## Copyright

Copyright (c) 2016 Cybrilla Technologies.

