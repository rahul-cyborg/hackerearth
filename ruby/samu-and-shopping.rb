def getdata(n,arr)
  
end
test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  temp = gets.chomp.strip.to_i
  tmp = []
  temp.times do
    tmp << gets.chomp.strip.split(' ').map(&:to_i)
  end
  input << temp
  input << tmp
end

out = []

(0...input.length).step(2).each do |i|
  val = getdata(input[i], input[i + 1])
  out << val
end

puts out