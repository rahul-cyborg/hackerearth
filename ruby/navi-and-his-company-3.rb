test_cases = gets.chomp.strip.to_i
out = []
test_cases.times do 

  num = gets.chomp.strip.to_i
  no_of_emp = 0
  no_of_project = 0

  num.times do
    input = gets.chomp.strip
    if input.to_s == 'New Project'
      if no_of_emp > 0
        no_of_emp -= 1
      else
      no_of_project += 1
      end
    else
      no_of_emp += input.to_i
    end
  end
out << no_of_project
end
puts out