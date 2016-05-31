test_cases = gets.chomp.strip.to_i
input = []
test_cases.times do
  input << gets.chomp.strip.to_i
end

square = {}

(1..70).each do |i|
  k = i * i
  square[k] = 1
end

count = 0
len = 0
(0...test_cases - 1).each do |i|
  (i + 1...test_cases).each do |j|
    val = input[i] * input[j]
    len += 1
    min = [input[i],input[j]].min
    max= [input[i],input[j]].max
    if max % min == 0
      rem = max / min
      count += 1 if square.key?(rem)
    end
  end
end


prob = count.fdiv(len)
puts sprintf "%.6f", prob
