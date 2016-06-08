test_cases = gets.chomp.strip.to_i
input = []
test_cases.times do
  input << gets.chomp.strip.split(' ').map(&:to_i)
  input << gets.chomp.strip.split(' ').map(&:to_i)
end

out = []

(0...input.length).step(2).each do |i|
  arr = input[i]
  sum = input[i + 1].inject(:+)
  temp = ((arr[0] + 1) * arr[2]) - sum
  temp = 1 if temp <= 0
  if temp <= arr[1]
    out << temp
  else
    out << "Impossible"
  end
end

puts out