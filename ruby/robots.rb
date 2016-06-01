test_cases = gets.chomp.strip.to_i

input = []
test_cases.times do
  input << gets.chomp.strip.to_i
  input << gets.chomp.strip.split(' ').map(&:to_i).sort
end

out = []

(0...input.length).step(2).each do |i|
  arr = input[i + 1]
  count = 0
  mul = 1
  arr.each do |val|
    mul *= (val - count) 
    count += 1
  end
  out << mul % 1000000007
end

puts out