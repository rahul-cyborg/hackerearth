test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.to_i
  input << gets.chomp.strip.split(' ').map(&:to_i)
end

out = []

def gethash (arr)
  hash = Hash.new
  arr.each do |val|
    if hash[val].nil?
      hash[val] = 1 
    else
      hash[val] += 1
    end
  end
  hash
end


out = []
(0...input.length).step(2).each do |i|
  sum = 0
  data = gethash(input[i+1])
  data.each do |key,val| 
    tmp = (val * (val + 1))/2
    sum += tmp
  end
  out << sum
end
puts out

