
test_cases = gets.chomp.strip.to_i

input = []
test_cases.times do
  input << gets.chomp.strip
  input << gets.chomp.strip
end

out = []

def get_permutations(second)
  result = []
  result << second
  (1...second.length).each do |i|
    str = second[i..-1] + second[0..i - 1]
    result << str
  end
  result
end

(0...input.length).step(2).each do |i|
  first = input[i]
  second = input[i + 1]
  arr = get_permutations(second)
  count = 0
  arr.each do |value|
    #tmp = first.to_i(2) ^ value.to_i(2)
    count += 1 if first == value
  end
  out << count
end

puts out
