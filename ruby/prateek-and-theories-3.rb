test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  n = gets.chomp.strip.to_i
  temp = []
  n.times do
    temp << gets.chomp.strip.split(' ').map(&:to_i)
  end
  input << n
  input << temp.sort
end

out = []



(0...input.length).step(2) do |i|
  arr = input[i + 1]
  temp = []
  arr.each do |ar|
    temp = temp + (ar[0]..ar[1]).to_a
  end
  
  val = temp.max_by { |i| temp.count(i) }
  out << temp.count(val) 
end

puts out
