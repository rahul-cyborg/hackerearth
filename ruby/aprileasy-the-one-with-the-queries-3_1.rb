input_string = gets.chomp.strip.to_s
test_cases = gets.chomp.strip.to_i

out = []


test_cases.times do
  input = gets.chomp
  flag = 'Yes'
  (0...input.length).each do |i|
    if input_string.index(input[i]).nil?
        flag = 'No'
        break
    else
      if i >=1 && input_string.index(input[i]) < input_string.index(input[i - 1])
        flag = 'No'
        break
      end
    end
  end
  out << flag
end

puts out
