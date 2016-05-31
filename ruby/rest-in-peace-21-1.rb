test_cases = gets.chomp.strip.to_i
input = []
test_cases.times do
  input << gets.chomp.strip
end
out = []
input.each do |val|
  flag = val.include? "21"
  if val.to_i % 21 == 0 || flag
    out << "The streak is broken!"
  else
    out << "The streak lives still in our heart!"
  end
end
puts out