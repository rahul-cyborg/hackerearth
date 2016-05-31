input_string = gets.chomp.strip.to_s
test_cases = gets.chomp.strip.to_i

out = []

arr = input_string.split('')
data =[]
(0...arr.length).each do |i|
  k = i + 1
  data += arr.combination(k).map{ |a| a.join("") }
end

hash = {}
data.each do |val|
  hash[val] = 1
end

test_cases.times do
  input = gets.chomp
  if hash.key?(input) 
    out << "Yes" 
  else
    out << "No" 
  end
end


puts out
