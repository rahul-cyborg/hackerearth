test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  n = gets.chomp.strip.to_i
  temp = []
  n.times do
    temp << gets.chomp.strip.split(' ').map(&:to_i)
  end
  input << n
  input << temp
end

out = []

(0...input.length).step(2) do |i|
  arr = input[i + 1]
  temp = []
  t = (arr[0][0]..arr[0][1]).to_a
  (1...arr.length).each do |p|
    y = (arr[p][0]..arr[p][1]).to_a
    d = t & y
    t = y
    temp = temp + d

  end
  out << temp.max_by{|x| temp.count(x) }
end

puts out
