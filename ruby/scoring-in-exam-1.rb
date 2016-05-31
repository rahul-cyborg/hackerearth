temp = gets.chomp.strip.split(' ').map(&:to_i)
n = temp[0]
q = temp[1]

times = gets.chomp.strip.split(' ').map(&:to_i)
scores = gets.chomp.strip.split(' ').map(&:to_i)

input = []

q.times do
  input << gets.chomp.strip.to_i
end

result = []
(0...scores.length).each do |i|
  result << [scores[i],times[i]]
end 

arr = result.sort.reverse!
#print arr

out = []

input.each do |val|
  sum = 0
  (0...val).each do |k|
    sum += arr[k][1]
  end
  out << sum
end

puts out